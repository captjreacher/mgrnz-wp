import { defineConfig } from 'vite';

export default defineConfig({
  root: 'scr',   // <-- change if your entry is elsewhere (must contain index.html)
  build: {
    outDir: '../dist',
    emptyOutDir: true
  }
});
