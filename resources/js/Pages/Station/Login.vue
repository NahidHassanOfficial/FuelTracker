<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import {
    faPhone,
    faLock,
    faGasPump,
    faChartLine,
    faBolt,
    faShieldHalved,
    faEye,
    faEyeSlash,
    faArrowRight,
    faCircleExclamation,
    faSpinner
} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

// Disable the master layout for the login page to ensure full control over the UI
defineOptions({ layout: null });

const showPass = ref(false);

const form = useForm({
    phone: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('station.login.post'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

    <Head title="Station Login" />

    <div class="min-h-screen gradient-bg font-sans selection:bg-indigo-100">
        <div class="min-h-screen flex flex-col lg:flex-row">
            <!-- Left branding — desktop only -->
            <div class="hidden lg:flex lg:w-[45%] xl:w-[40%] flex-col justify-center items-center p-12 xl:p-16">
                <div class="max-w-md space-y-8">
                    <div>
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 rounded-2xl gradient-primary mb-6 shadow-lg shadow-blue-500/20">
                            <font-awesome-icon :icon="faGasPump" class="text-3xl text-white" />
                        </div>
                        <h1 class="text-4xl xl:text-5xl font-bold gradient-text pb-1 leading-tight tracking-tight">
                            FuelTrack</h1>
                        <p class="text-lg font-medium text-slate-500/80 mt-3 leading-relaxed">
                            Welcome back. Manage your station with ease.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="flex items-center gap-4 glass-card p-5 transition-transform duration-300 hover:scale-[1.02]">
                            <div
                                class="w-11 h-11 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-600">
                                <font-awesome-icon :icon="faChartLine" />
                            </div>
                            <span class="text-base font-medium text-slate-700">Dashboard analytics at a glance</span>
                        </div>
                        <div
                            class="flex items-center gap-4 glass-card p-5 transition-transform duration-300 hover:scale-[1.02]">
                            <div
                                class="w-11 h-11 rounded-xl bg-amber-500/10 flex items-center justify-center text-amber-600">
                                <font-awesome-icon :icon="faBolt" />
                            </div>
                            <span class="text-base font-medium text-slate-700">Quick fuel sales in seconds</span>
                        </div>
                        <div
                            class="flex items-center gap-4 glass-card p-5 transition-transform duration-300 hover:scale-[1.02]">
                            <div
                                class="w-11 h-11 rounded-xl bg-emerald-500/10 flex items-center justify-center text-emerald-600">
                                <font-awesome-icon :icon="faShieldHalved" />
                            </div>
                            <span class="text-base font-medium text-slate-700">Secure role-based access</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right form -->
            <div class="flex-1 flex flex-col justify-center px-4 py-8 sm:px-12 lg:px-16 xl:px-24">
                <div class="w-full max-w-[500px] mx-auto slide-up">
                    <!-- Mobile header -->
                    <div class="text-center mb-10 lg:hidden">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 rounded-2xl gradient-primary mb-5 shadow-lg shadow-blue-500/20">
                            <font-awesome-icon :icon="faGasPump" class="text-3xl text-white" />
                        </div>
                        <h1 class="text-3xl font-bold gradient-text tracking-tight">FuelTrack</h1>
                        <p class="text-slate-500 font-medium mt-1">Login to your station account</p>
                    </div>

                    <!-- Desktop header -->
                    <div class="hidden lg:block mb-10">
                        <h2 class="text-3xl xl:text-4xl font-bold text-slate-800 tracking-tight">Welcome back</h2>
                        <p class="text-slate-500 text-lg mt-1 font-medium">Sign in to your account</p>
                    </div>

                    <form @submit.prevent="submit" class="glass-card-strong p-8 sm:p-10 space-y-6">
                        <div v-if="form.errors.error"
                            class="p-4 rounded-xl bg-rose-50 border border-rose-100 text-rose-600 text-sm font-medium slide-up flex items-center gap-2">
                            <font-awesome-icon :icon="faCircleExclamation" class="text-rose-500" />
                            {{ form.errors.error }}
                        </div>

                        <div class="space-y-1.5 text-left">
                            <label class="text-sm font-semibold text-slate-700 ml-1">Phone Number</label>
                            <div class="relative group">
                                <span
                                    class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                    <font-awesome-icon :icon="faPhone" />
                                </span>
                                <input type="tel" placeholder="+880 1XXXXXXXXX" v-model="form.phone"
                                    class="input-glass pr-4 py-3.5"
                                    :class="{ 'border-rose-300 ring-rose-100': form.errors.phone }" required
                                    autofocus />
                            </div>
                            <span v-if="form.errors.phone" class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{
                                form.errors.phone }}</span>
                        </div>

                        <div class="space-y-1.5 text-left">
                            <div class="flex items-center justify-between ml-1">
                                <label class="text-sm font-semibold text-slate-700">Password</label>
                            </div>
                            <div class="relative group">
                                <span
                                    class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                    <font-awesome-icon :icon="faLock" />
                                </span>
                                <input :type="showPass ? 'text' : 'password'" placeholder="Enter your password"
                                    v-model="form.password" class="input-glass pr-12 py-3.5"
                                    :class="{ 'border-rose-300 ring-rose-100': form.errors.password }" required />
                                <button type="button" @click="showPass = !showPass"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 flex items-center justify-center rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100/50 transition-all">
                                    <font-awesome-icon :icon="showPass ? faEyeSlash : faEye" />
                                </button>
                            </div>
                            <span v-if="form.errors.password" class="text-xs text-rose-500 mt-1 ml-1 font-medium">{{
                                form.errors.password }}</span>
                        </div>

                        <div class="flex items-center justify-between py-1">
                            <label class="flex items-center gap-2.5 cursor-pointer group select-none">
                                <div class="relative flex items-center">
                                    <input type="checkbox" v-model="form.remember"
                                        class="peer h-5 w-5 cursor-pointer appearance-none rounded border border-slate-300 bg-white shadow transition-all checked:border-blue-600 checked:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100" />
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="absolute h-3.5 w-3.5 opacity-0 peer-checked:opacity-100 text-white left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <span
                                    class="text-sm font-semibold text-slate-500 group-hover:text-slate-800 transition-colors">Remember
                                    me</span>
                            </label>
                        </div>

                        <button type="submit"
                            class="btn-primary w-full text-center py-4 text-base tracking-wide flex items-center justify-center gap-2 group shadow-xl shadow-blue-600/10"
                            :disabled="form.processing">
                            <span v-if="form.processing" class="flex items-center gap-2">
                                <font-awesome-icon :icon="faSpinner" spin />
                                Authenticating...
                            </span>
                            <span v-else class="flex items-center gap-2">
                                Login
                                <font-awesome-icon :icon="faArrowRight"
                                    class="transition-transform group-hover:translate-x-1" />
                            </span>
                        </button>

                        <p class="text-center text-sm font-semibold text-slate-500 pt-2">
                            Don't have an account?
                            <Link :href="route('station.register.view')"
                                class="text-blue-600 hover:text-blue-700 transition-colors ml-1">Register now</Link>
                        </p>
                    </form>
                </div>
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

.glass-card {
    background: rgba(255, 255, 255, 0.45);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: 0 8px 32px -4px rgba(31, 38, 135, 0.05);
    border-radius: 1.25rem;
}

.glass-card-strong {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(0, 0, 0, 0.08);
    /* More visible border */
    box-shadow:
        0 1px 3px 0 rgba(0, 0, 0, 0.05),
        0 20px 50px -12px rgba(37, 99, 235, 0.12),
        inset 0 1px 0 0 rgba(255, 255, 255, 0.5);
    border-radius: 2rem;
}

.input-glass {
    @apply w-full rounded-2xl border px-5 py-4 pl-14 text-[0.95rem] transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-500/15 focus:border-blue-400 focus:bg-white/90 placeholder:text-slate-400 font-medium;
    background: rgba(255, 255, 255, 0.5);
    border-color: rgba(0, 0, 0, 0.08);
}

.input-glass:hover {
    background: rgba(255, 255, 255, 0.8);
    border-color: rgba(0, 0, 0, 0.1);
}

.btn-primary {
    @apply rounded-2xl font-bold text-white transition-all duration-300 hover:shadow-indigo-500/30 hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.97] disabled:opacity-70 disabled:cursor-not-allowed;
    background: linear-gradient(135deg, #3b82f6 0%, #7c3aed 100%);
    box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
}

.slide-up {
    animation: slideUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Force body styling if needed */
body {
    margin: 0;
    padding: 0;
    background-color: #f8fafc;
}
</style>
