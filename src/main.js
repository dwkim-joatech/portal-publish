import './style.css';

// 페이지 전환 효과 관리
class PageTransition {
  constructor() {
    this.init();
  }

  init() {
    // 페이지 로딩 오버레이 생성
    this.createLoadingOverlay();
    
    // 페이지 전환 효과 적용
    this.applyPageTransition();
    
    // 내비게이션 클릭 이벤트 처리
    this.setupNavigationHandlers();
  }

  createLoadingOverlay() {
    const overlay = document.createElement('div');
    overlay.className = 'page-loading-overlay';
    overlay.innerHTML = '<div class="text-gray-600">로딩 중...</div>';
    document.body.appendChild(overlay);
    this.loadingOverlay = overlay;
  }

  applyPageTransition() {
    const mainContent = document.querySelector('[data-name="app-layout"]');
    if (mainContent) {
      mainContent.classList.add('page-transition');
      
      // 페이지 로드 완료 후 애니메이션 적용
      setTimeout(() => {
        mainContent.classList.add('page-transition-active');
      }, 100);
    }
  }

  setupNavigationHandlers() {
    // 모든 내부 링크에 전환 효과 적용
    document.addEventListener('click', (e) => {
      const link = e.target.closest('a');
      if (link && link.href && !link.external && !link.target) {
        e.preventDefault();
        this.transitionToPage(link.href);
      }
    });

    // bfcache 복원 시 로딩 오버레이 숨기기
    window.addEventListener('pageshow', (event) => {
      this.hideLoading();
      if (event.persisted) {
        const mainContent = document.querySelector('[data-name="app-layout"]');
        if (mainContent) mainContent.classList.add('page-transition-active');
      }
    });
  }

  showLoading() {
    if (this.loadingOverlay) {
      this.loadingOverlay.classList.add('active');
    }
  }

  hideLoading() {
    if (this.loadingOverlay) {
      this.loadingOverlay.classList.remove('active');
    }
  }

  transitionToPage(url) {
    this.showLoading();
    
    // 현재 페이지 페이드 아웃
    const mainContent = document.querySelector('[data-name="app-layout"]');
    if (mainContent) {
      mainContent.classList.remove('page-transition-active');
      
      setTimeout(() => {
        window.location.href = url;
      }, 300);
    } else {
      window.location.href = url;
    }
  }
}

// 페이지 로드 시 전환 효과 초기화
document.addEventListener('DOMContentLoaded', () => {
  new PageTransition();
});
