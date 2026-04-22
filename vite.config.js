import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'path'

export default defineConfig({
  publicDir: false,
  plugins: [tailwindcss()],
  build: {
    manifest: true,
    rollupOptions: {
      input: {
        app: resolve(__dirname, 'resources/css/app.css')
      }
    },
    outDir: 'public/build',
    emptyOutDir: true,
  }
})
