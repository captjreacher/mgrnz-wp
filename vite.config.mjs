import { defineConfig } from 'vite';

export default defineConfig({
  root: 'scr',           // if your frontend lives elsewhere, change this
  build: {
    outDir: '../dist',   // output at repo root /dist
    emptyOutDir: true
  }
});
