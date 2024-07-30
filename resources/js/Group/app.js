import '../bootstrap';
import '../../css/group.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../../vendor/tightenco/ziggy/src/js';
import fallbackImage from '@/Shared/Directives/fallback-image';

const appName = 'Jocoh Groups';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .directive('fallback', fallbackImage)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
