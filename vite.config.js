import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  base: './',
  plugins: [
    vue({
      template:{
        compilerOptions: {
          isCustomElement: (tag) => ['font'].includes(tag),
        }
      }
    }),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  },
  server: {
    port: 5173,         // <-- PUERTO FIJO
    strictPort: true    // <-- NO CAMBIA SI ESTÁ OCUPADO, FALLA
  }
})
