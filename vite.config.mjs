// vite.config.mjs
import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

export default defineConfig({
  base: process.env.VITE_BASE ?? '/',   // or '/mgrnz-wp/' if deploying under a subpath
  plugins: [react()],
  build: { outDir: 'dist' }
})
