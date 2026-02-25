import { defineConfig } from 'vite';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [],
  // base: '/portal-publish/', // 주석 처리: 프록시 연동 시 전체 경로를 무시하고 루트로 연결하기 위함
  server: {
    port: 3000,
    open: true
  }
});
