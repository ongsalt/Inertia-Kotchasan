import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  base: '/js/inertia/',
  publicDir: false,
  build: {
    manifest: true,
    outDir: 'js\\inertia',
    rollupOptions: { 
      input: ['resources/js/app.js', 'resources/views'] 
    },
    assetsInlineLimit: 0
  },
  resolve: { alias: { '@': '/resources/js' } },
})
