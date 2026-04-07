<script setup>
import { Head, useForm, Link, usePage } from '@inertiajs/vue3';
import { ref, onMounted, watch, computed } from 'vue';
import axios from 'axios';
import * as L from 'leaflet';
import {
    faGasPump,
    faUser,
    faPhone,
    faEnvelope,
    faLock,
    faMapMarkerAlt,
    faArrowRight,
    faArrowLeft,
    faSpinner,
    faGlobe,
    faCircleCheck,
    faCircleExclamation,
    faEye,
    faEyeSlash,
    faPaperPlane,
    faShieldHalved,
    faHouse
} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

// Disable the master layout for the registration page to ensure full control over the UI
defineOptions({ layout: null });

const showPass = ref(false);
const page = usePage();

// Success state based on local action or flash message from session
const localSuccess = ref(false);
const isSuccess = computed(() => {
    return localSuccess.value || (page.props.flash && page.props.flash.registered);
});

const map = ref(null);
const marker = ref(null);
const divisions = ref([]);
const districts = ref([]);
const upazilas = ref([]);

const form = useForm({
    name: '',
    division_id: '',
    district_id: '',
    upazila_id: '',
    lat: 23.8103, // Default to Dhaka
    long: 90.4125,
    phone: '',
    email: '',
    password: '',
    password_confirmation: '',
});

onMounted(async () => {
    // Fetch Divisions
    try {
        const response = await axios.get('/api/divisions');
        divisions.value = response.data;
    } catch (e) {
        console.error('Failed to fetch divisions', e);
    }

    // Initialize Map
    initMap();
});

const initMap = () => {
    const mapElement = document.getElementById('station-map');
    if (!mapElement) return;

    // Clean up if already exists (HMR safety)
    if (map.value) {
        map.value.remove();
    }

    map.value = L.map('station-map', {
        zoomControl: false,
        scrollWheelZoom: true
    }).setView([form.lat, form.long], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map.value);

    // Custom marker icon fix for Leaflet in Vite
    const DefaultIcon = L.icon({
        iconUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png',
        iconRetinaUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png',
        shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    marker.value = L.marker([form.lat, form.long], {
        draggable: true,
        icon: DefaultIcon
    }).addTo(map.value);

    marker.value.on('dragend', function (event) {
        const position = marker.value.getLatLng();
        form.lat = position.lat.toFixed(7);
        form.long = position.lng.toFixed(7);
    });

    map.value.on('click', function (event) {
        const { lat, lng } = event.latlng;
        marker.value.setLatLng([lat, lng]);
        form.lat = lat.toFixed(7);
        form.long = lng.toFixed(7);
    });

    L.control.zoom({
        position: 'bottomright'
    }).addTo(map.value);
};

// Cascading Dropdowns
watch(() => form.division_id, async (newId) => {
    if (!newId) {
        districts.value = [];
        upazilas.value = [];
        form.district_id = '';
        form.upazila_id = '';
        return;
    }
    try {
        const response = await axios.get(`/api/districts/${newId}`);
        districts.value = response.data;
        form.district_id = '';
        form.upazila_id = '';
    } catch (e) {
        console.error(e);
    }
});

watch(() => form.district_id, async (newId) => {
    if (!newId) {
        upazilas.value = [];
        form.upazila_id = '';
        return;
    }
    try {
        const response = await axios.get(`/api/upazilas/${newId}`);
        upazilas.value = response.data;
        form.upazila_id = '';
    } catch (e) {
        console.error(e);
    }
});

const submit = () => {
    form.post(route('station.register.post'), {
        onSuccess: () => {
            localSuccess.value = true;
        },
        onError: (errors) => {
            console.log(errors);
        }
    });
};
</script>

<template>

    <Head title="Register Station" />

    <div
        class="min-h-screen gradient-bg font-sans selection:bg-indigo-100 py-12 px-4 sm:px-6 lg:px-8 flex flex-col justify-center">

        <div v-if="!isSuccess" class="max-w-6xl mx-auto w-full">
            <!-- Header -->
            <div class="text-center mb-12 slide-up">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 rounded-3xl gradient-primary mb-6 shadow-xl shadow-blue-500/20">
                    <font-awesome-icon :icon="faGasPump" class="text-4xl text-white" />
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold gradient-text tracking-tight mb-4">Register Your Station
                </h1>
                <p class="text-slate-500 font-medium text-lg">Join FuelTrack and streamline your business operations.
                </p>
            </div>

            <form @submit.prevent="submit" class="grid grid-cols-1 lg:grid-cols-12 gap-8 slide-up items-start">

                <!-- Left Column: Basic Info & Map -->
                <div class="lg:col-span-7 space-y-8">
                    <div class="glass-card-strong p-8 space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <h3 class="text-xl font-bold text-slate-800 flex items-center gap-3">
                                <span
                                    class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-600 text-sm">01</span>
                                Station Information
                            </h3>
                            <div
                                class="hidden sm:block text-[10px] uppercase font-bold text-slate-400 tracking-widest bg-slate-50 px-3 py-1 rounded-full border border-slate-100">
                                Step One of Two</div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-1.5 sm:col-span-2">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Station Name</label>
                                <div class="relative group">
                                    <span
                                        class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <font-awesome-icon :icon="faUser" />
                                    </span>
                                    <input type="text" v-model="form.name" placeholder="Enter station name"
                                        class="input-glass"
                                        :class="{ 'border-rose-300 ring-rose-50': form.errors.name }" required />
                                </div>
                                <div v-if="form.errors.name"
                                    class="flex items-center gap-1.5 text-xs text-rose-500 mt-1 ml-1 font-medium">
                                    <font-awesome-icon :icon="faCircleExclamation" />
                                    {{ form.errors.name }}
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Division</label>
                                <div class="relative">
                                    <select v-model="form.division_id"
                                        class="input-glass pl-5 appearance-none bg-no-repeat bg-[right_1rem_center] font-medium"
                                        :class="{ 'border-rose-300 ring-rose-50': form.errors.division_id }" required>
                                        <option value="" disabled selected>Select Division</option>
                                        <option v-for="div in divisions" :key="div.id" :value="div.id">{{ div.name }}
                                        </option>
                                    </select>
                                </div>
                                <span v-if="form.errors.division_id"
                                    class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{ form.errors.division_id
                                    }}</span>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-sm font-semibold text-slate-700 ml-1">District</label>
                                <select v-model="form.district_id" class="input-glass pl-5 font-medium appearance-none"
                                    :disabled="!districts.length"
                                    :class="{ 'border-rose-300 ring-rose-50': form.errors.district_id }" required>
                                    <option value="" disabled selected>Select District</option>
                                    <option v-for="dis in districts" :key="dis.id" :value="dis.id">{{ dis.name }}
                                    </option>
                                </select>
                                <span v-if="form.errors.district_id"
                                    class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{ form.errors.district_id
                                    }}</span>
                            </div>

                            <div class="space-y-1.5 sm:col-span-2">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Upazila</label>
                                <select v-model="form.upazila_id" class="input-glass pl-5 font-medium appearance-none"
                                    :disabled="!upazilas.length"
                                    :class="{ 'border-rose-300 ring-rose-50': form.errors.upazila_id }" required>
                                    <option value="" disabled selected>Select Upazila</option>
                                    <option v-for="upa in upazilas" :key="upa.id" :value="upa.id">{{ upa.name }}
                                    </option>
                                </select>
                                <span v-if="form.errors.upazila_id"
                                    class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{ form.errors.upazila_id
                                    }}</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-2">
                                <label class="text-sm font-semibold text-slate-700 ml-1 flex items-center gap-2">
                                    <font-awesome-icon :icon="faMapMarkerAlt" class="text-blue-500" />
                                    Station Location (Select on Map)
                                </label>
                                <div class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Drag marker
                                    to adjust</div>
                            </div>
                            <div id="station-map"
                                class="h-64 sm:h-80 w-full rounded-2xl border-2 border-slate-100/80 overflow-hidden z-0 bg-slate-50 shadow-inner">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="p-3.5 rounded-2xl bg-white border border-slate-100 shadow-sm">
                                    <div class="text-[10px] font-bold text-slate-400 uppercase mb-1 tracking-widest">
                                        Latitude</div>
                                    <div class="text-sm font-mono font-bold text-slate-700">{{ form.lat }}</div>
                                </div>
                                <div class="p-3.5 rounded-2xl bg-white border border-slate-100 shadow-sm">
                                    <div class="text-[10px] font-bold text-slate-400 uppercase mb-1 tracking-widest">
                                        Longitude</div>
                                    <div class="text-sm font-mono font-bold text-slate-700">{{ form.long }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Auth & Contact -->
                <div class="lg:col-span-5 space-y-8">
                    <div class="glass-card-strong p-8 space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <h3 class="text-xl font-bold text-slate-800 flex items-center gap-3">
                                <span
                                    class="w-8 h-8 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-600 text-sm">02</span>
                                Contact & Account
                            </h3>
                        </div>

                        <div class="space-y-5">
                            <div class="space-y-1.5">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Phone Number</label>
                                <div class="relative group">
                                    <span
                                        class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <font-awesome-icon :icon="faPhone" />
                                    </span>
                                    <input type="tel" v-model="form.phone" placeholder="01XXXXXXXXX" class="input-glass"
                                        :class="{ 'border-rose-300 ring-rose-50': form.errors.phone }" required />
                                </div>
                                <span v-if="form.errors.phone" class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{
                                    form.errors.phone }}</span>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Email Address</label>
                                <div class="relative group">
                                    <span
                                        class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <font-awesome-icon :icon="faEnvelope" />
                                    </span>
                                    <input type="email" v-model="form.email" placeholder="station@example.com"
                                        class="input-glass"
                                        :class="{ 'border-rose-300 ring-rose-50': form.errors.email }" required />
                                </div>
                                <span v-if="form.errors.email" class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{
                                    form.errors.email }}</span>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Password</label>
                                <div class="relative group">
                                    <span
                                        class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <font-awesome-icon :icon="faLock" />
                                    </span>
                                    <input :type="showPass ? 'text' : 'password'" v-model="form.password"
                                        placeholder="Create a password" class="input-glass pr-12"
                                        :class="{ 'border-rose-300 ring-rose-50': form.errors.password }" required />
                                    <button type="button" @click="showPass = !showPass"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100/50 transition-all">
                                        <font-awesome-icon :icon="showPass ? faEyeSlash : faEye" />
                                    </button>
                                </div>
                                <span v-if="form.errors.password" class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{
                                    form.errors.password }}</span>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-sm font-semibold text-slate-700 ml-1">Confirm Password</label>
                                <div class="relative group">
                                    <span
                                        class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                        <font-awesome-icon :icon="faCircleCheck" />
                                    </span>
                                    <input :type="showPass ? 'text' : 'password'" v-model="form.password_confirmation"
                                        placeholder="Confirm your password" class="input-glass" required />
                                </div>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="btn-primary w-full py-4 flex items-center justify-center gap-3 group shadow-xl shadow-blue-600/10"
                                :disabled="form.processing">
                                <span v-if="form.processing" class="flex items-center gap-2 font-bold">
                                    <font-awesome-icon :icon="faSpinner" spin />
                                    Creating Account...
                                </span>
                                <span v-else class="flex items-center gap-2 font-bold tracking-wide">
                                    Register Station
                                    <font-awesome-icon :icon="faArrowRight"
                                        class="transition-transform group-hover:translate-x-1" />
                                </span>
                            </button>
                        </div>

                        <div class="pt-6 flex flex-col items-center gap-5 border-t border-slate-100">
                            <p class="text-[0.9rem] font-semibold text-slate-500">
                                Already have an account?
                                <Link :href="route('station.login.view')"
                                    class="text-blue-600 hover:text-blue-700 transition-colors ml-1 font-bold underline decoration-blue-600/20 underline-offset-4 hover:decoration-blue-600">
                                    Login here</Link>
                            </p>
                            <Link :href="route('home')"
                                class="inline-flex items-center gap-2 text-xs font-bold text-slate-400 hover:text-slate-600 transition-colors group px-4 py-2 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100">
                                <font-awesome-icon :icon="faArrowLeft"
                                    class="transition-transform group-hover:-translate-x-1" />
                                Back to Welcome
                            </Link>
                        </div>
                    </div>

                    <!-- Trust Badge -->
                    <div class="text-center p-6 rounded-2xl bg-slate-50/50 border border-white/40 shadow-inner">
                        <div class="flex items-center justify-center gap-2 text-slate-400 mb-2">
                            <font-awesome-icon :icon="faShieldHalved" class="text-slate-300" />
                            <span class="text-[10px] font-bold uppercase tracking-widest">Enterprise Grade
                                Security</span>
                        </div>
                        <p class="text-[11px] text-slate-400 font-medium">Your data is encrypted and protected with
                            industry standard security protocols.</p>
                    </div>
                </div>
            </form>
        </div>

        <!-- Success Message -->
        <div v-else class="max-w-xl mx-auto w-full slide-up px-4">
            <div class="glass-card-strong p-10 text-center space-y-8 border-t-4 border-t-emerald-500">
                <div
                    class="w-24 h-24 rounded-full bg-emerald-500/10 text-emerald-600 flex items-center justify-center mx-auto mb-2 animate-bounce">
                    <font-awesome-icon :icon="faPaperPlane" class="text-4xl" />
                </div>

                <div class="space-y-4">
                    <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Registration Successful!</h2>
                    <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 space-y-4">
                        <div class="flex items-start gap-4 text-left">
                            <div
                                class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-600 shrink-0 flex items-center justify-center">
                                <font-awesome-icon :icon="faEnvelope" />
                            </div>
                            <p class="text-[0.9rem] font-medium text-slate-600 leading-relaxed">
                                A verification email has been sent to <span
                                    class="font-extrabold text-slate-800 tracking-tight">{{ form.email }}</span>. Please
                                check your inbox and verify your email.
                            </p>
                        </div>
                        <div class="flex items-start gap-4 text-left">
                            <div
                                class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 shrink-0 flex items-center justify-center">
                                <font-awesome-icon :icon="faShieldHalved" />
                            </div>
                            <p class="text-[0.9rem] font-medium text-slate-600 leading-relaxed">
                                After verification, please <span
                                    class="font-extrabold text-slate-800 tracking-tight">wait for admin approval</span>.
                                Once approved, you will be notified and can log in to your dashboard.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <Link :href="route('home')"
                        class="btn-primary w-full py-4 text-base tracking-wide flex items-center justify-center gap-2 group shadow-xl shadow-blue-600/10">
                        <font-awesome-icon :icon="faHouse" />
                        Back to Home
                        <font-awesome-icon :icon="faArrowRight"
                            class="transition-transform group-hover:translate-x-1" />
                    </Link>
                </div>

                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] pt-2">FuelTrack Ecosystem
                    &copy; 2026</p>
            </div>
        </div>
    </div>
</template>

<style>
@reference "../../../css/app.css";
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

.gradient-bg {
    background: linear-gradient(135deg, #f0f4ff 0%, #f9f7ff 35%, #ffffff 70%, #f8fafc 100%);
    background-attachment: fixed;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
}

.gradient-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
}

.gradient-text {
    background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.glass-card-strong {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow:
        0 4px 6px -1px rgba(0, 0, 0, 0.05),
        0 20px 40px -12px rgba(37, 99, 235, 0.08),
        inset 0 1px 0 0 rgba(255, 255, 255, 0.5);
    border-radius: 2rem;
}

.input-glass {
    @apply w-full rounded-2xl border px-5 py-3.5 pl-14 text-[0.95rem] transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-400 focus:bg-white/90 placeholder:text-slate-400 font-medium overflow-hidden;
    background: rgba(255, 255, 255, 0.5);
    border-color: rgba(0, 0, 0, 0.06);
}

.input-glass:hover:not(:disabled) {
    background: rgba(255, 255, 255, 0.9);
    border-color: rgba(0, 0, 0, 0.1);
}

.input-glass:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    background: rgba(0, 0, 0, 0.02);
}

.btn-primary {
    @apply rounded-2xl text-white transition-all duration-300 hover:shadow-indigo-500/30 hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98] disabled:opacity-70 disabled:cursor-not-allowed;
    background: linear-gradient(135deg, #3b82f6 0%, #7c3aed 100%);
    box-shadow: 0 10px 20px -5px rgba(59, 130, 246, 0.4);
}

.slide-up {
    animation: slideUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Custom Select styling */
select.input-glass {
    padding-left: 1.25rem !important;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2394a3b8'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    background-size: 1.25rem;
    background-position: right 1rem center;
    background-repeat: no-repeat;
}

/* Leaflet control fixes */
.leaflet-container {
    cursor: crosshair !important;
}

.leaflet-bar {
    border: none !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
}

.leaflet-bar a {
    background-color: white !important;
    color: #475569 !important;
    border-color: #f1f5f9 !important;
}

.leaflet-bar a:hover {
    background-color: #f8fafc !important;
    color: #1e293b !important;
}
</style>