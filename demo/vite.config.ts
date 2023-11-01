import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  base: '/js/inertia/', // do kotchasan routing later
  publicDir: false,
  build: {
    manifest: true,
    outDir: 'js\\inertia',
    assetsDir: 'js\\inertia',
    rollupOptions: { 
      input: ['resources/js/app.js', 'resources/views/index.html'] 
    },
    assetsInlineLimit: 0,
    watch: {
      
    }
  },
  resolve: { alias: { '@': '/resources/js' } },
})
