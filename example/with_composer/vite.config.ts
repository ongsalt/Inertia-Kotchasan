import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  base: '/static/inertia/', // do kotchasan routing later
  publicDir: false,
  build: {
    manifest: true,
    outDir: 'static\\inertia',
    assetsDir: 'assets',
    rollupOptions: { 
      input: ['resources/js/app.js', 'resources/views/index.html'] 
    },
    assetsInlineLimit: 0,
  },
  resolve: { alias: { '@': '/resources/js' } },
})
