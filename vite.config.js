import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vuePlugin from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.js'],
      refresh: true,
    }),
    vuePlugin(),
  ],
  resolve: {
    alias: {
      ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue.es.js'),
    },
  },
});
