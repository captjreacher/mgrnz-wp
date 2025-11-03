// vite.config.mjs  (or .js if "type":"module")
import { defineConfig } from 'vite'
// import react from '@vitejs/plugin-react' // if you need it

export default defineConfig({
  // plugins: [react()],
  build: {
    outDir: 'dist',
  },
})

