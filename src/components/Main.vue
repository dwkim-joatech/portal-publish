<template>
  <div class="w-full max-w-[360px] mx-auto bg-white relative" data-name="main01" data-node-id="7939:2314">
    <!-- 상단 배너 섹션 (GNB) -->
    <div class="relative w-full h-[380px] overflow-hidden" data-name="gnb" data-node-id="7939:2316">
      <!-- 배경 이미지 -->
      <div class="absolute inset-0 w-[600px] h-[400px] left-[-36px] top-0 z-0">
        <img :src="images.flame" alt="" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>
      </div>

      <!-- 상태바 -->
      <StatusBar class="absolute top-0 left-0 right-0 z-30" />

      <!-- GNB -->
      <GnbMain class="absolute top-0 left-0 right-0 z-40" />

      <!-- 텍스트 -->
      <div class="absolute left-[20px] top-[164px] z-10 w-[260px]">
        <div class="bg-[#2074e2] h-[2px] w-[94px] mb-[10px]"></div>
        <div class="text-white">
          <p class="text-[26px] leading-[32px] mb-0">
            <span class="font-semibold">조아테크</span><span class="font-light">는</span>
          </p>
          <p class="text-[26px] font-light leading-[32px] mb-0">가스산업계의 변화를</p>
          <p class="text-[26px] font-light leading-[32px] mb-0">주도합니다.</p>
        </div>
      </div>

      <!-- 앱 메뉴 (이미지 위에 겹침) -->
      <div class="absolute bottom-0 left-0 right-0 z-20">
        <MenuApp class="w-full" />
      </div>
    </div>

    <!-- 조아테크 서비스 섹션 -->
    <div class="w-full bg-white">
      <div class="flex items-center justify-between pt-[40px] pb-[10px] px-[20px]">
        <h2 class="text-[18px] font-semibold text-black">조아테크 서비스</h2>
        <div class="flex items-center">
          <span class="text-[13px] text-[#999]">더보기</span>
          <img :src="images.keyboardArrowRight" alt="" class="w-[16px] h-[16px]" />
        </div>
      </div>

      <MenuTab />

      <!-- 중고장터 리스트 -->
      <div class="px-[20px]">
        <!-- 판매글 1 -->
        <div class="flex gap-[10px] py-[20px] border-b border-[#eee]">
          <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
            <img :src="images.image32" alt="" class="absolute w-full h-full object-cover" />
          </div>
          <div class="flex-1 flex flex-col gap-[6px]">
            <div class="flex gap-[6px]">
              <span class="px-[6px] h-[16px] text-[11px] leading-[16px] border border-[#2074e2] text-[#2074e2] rounded-full flex items-center justify-center">판매글</span>
              <span class="px-[6px] h-[16px] text-[11px] leading-[16px] bg-[rgba(32,116,226,0.15)] text-[#2074e2] rounded-full flex items-center justify-center">거래중</span>
            </div>
            <p class="text-[14px] font-semibold text-black leading-normal">[탱크/용기] 250,200Kg 소형저장탱크 할부판매 합니다.</p>
            <div class="flex items-center gap-[6px] text-[12px] text-[#999]">
              <span>서울</span>
              <span>0105259****</span>
              <div class="w-px h-[12px] bg-[#ddd]"></div>
              <span>2026.01.16</span>
            </div>
          </div>
        </div>

        <!-- 구매글 2 -->
        <div class="flex gap-[10px] py-[20px] border-b border-[#eee]">
          <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
            <img :src="images.image34" alt="" class="absolute w-full h-full object-cover" />
          </div>
          <div class="flex-1 flex flex-col gap-[6px]">
            <div class="flex gap-[6px]">
              <span class="px-[6px] h-[16px] text-[11px] leading-[16px] border border-[#39bd28] text-[#39bd28] rounded-full flex items-center justify-center">구매글</span>
              <span class="px-[6px] h-[16px] text-[11px] leading-[16px] bg-[rgba(102,102,102,0.15)] text-[#666] rounded-full flex items-center justify-center">거래완료</span>
            </div>
            <p class="text-[14px] font-semibold text-black leading-normal">[탱크/용기] 200KG 탱크 구합니다.</p>
            <div class="flex items-center gap-[6px] text-[12px] text-[#999]">
              <span>서울</span>
              <span>0105259****</span>
              <div class="w-px h-[12px] bg-[#ddd]"></div>
              <span>2026.01.16</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 업계소식 섹션 -->
    <div class="w-full bg-white">
      <div class="flex items-center justify-between pt-[40px] pb-[10px] px-[20px]">
        <h2 class="text-[18px] font-semibold text-black">업계소식</h2>
        <div class="flex items-center">
          <span class="text-[13px] text-[#999]">더보기</span>
          <img :src="images.keyboardArrowRight" alt="" class="w-[16px] h-[16px]" />
        </div>
      </div>

      <div class="px-[20px]">
        <!-- 뉴스 1 -->
        <div class="flex gap-[10px] py-[20px] border-b border-[#eee]">
          <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
            <img :src="images.image30" alt="" class="absolute w-full h-full object-cover" />
          </div>
          <div class="flex-1 flex flex-col gap-[6px]">
            <p class="text-[14px] font-semibold text-black leading-normal">LPG판매협회, 벌크로리 순회점검 '체계화·고도화' 방안 수립</p>
            <div class="flex items-center gap-[6px] text-[12px] text-[#999]">
              <span>가스신문</span>
              <div class="w-px h-[12px] bg-[#ddd]"></div>
              <span>2026-02-03</span>
            </div>
          </div>
        </div>

        <!-- 뉴스 2 -->
        <div class="flex gap-[10px] py-[20px] border-b border-[#eee]">
          <div class="relative w-[80px] h-[80px] bg-[#eee] flex-shrink-0 overflow-hidden">
            <img :src="images.image31" alt="" class="absolute w-full h-full object-cover" />
          </div>
          <div class="flex-1 flex flex-col gap-[6px]">
            <p class="text-[14px] font-semibold text-black leading-normal">장수군, '2026년 LPG용기 검사비 지원' 실시</p>
            <div class="flex items-center gap-[6px] text-[12px] text-[#999]">
              <span>가스신문</span>
              <div class="w-px h-[12px] bg-[#ddd]"></div>
              <span>2026-02-03</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LPG 단가동향 섹션 -->
    <div class="w-full bg-white">
      <div class="flex items-center justify-between pt-[40px] pb-[10px] px-[20px]">
        <h2 class="text-[18px] font-semibold text-black">LPG 단가동향</h2>
        <div class="flex items-center">
          <span class="text-[13px] text-[#999]">더보기</span>
          <img :src="images.keyboardArrowRight" alt="" class="w-[16px] h-[16px]" />
        </div>
      </div>

      <div class="p-[20px]">
        <img :src="images.image29" alt="" class="w-[320px] h-[252px] object-cover" />
      </div>
    </div>

    <!-- 서비스 문의 버튼 -->
    <div class="p-[20px]">
      <button class="w-full h-[50px] bg-[#2074e2] flex items-center justify-center gap-[10px] text-white text-[16px] font-semibold rounded">
        <img :src="images.headphones" alt="" class="w-[24px] h-[24px]" />
        <span>서비스 문의하기</span>
      </button>
    </div>

    <!-- 앱 바로가기 섹션 -->
    <div class="px-[20px] py-[40px]">
      <h2 class="text-[18px] font-semibold text-black mb-[30px]">조아테크 앱 바로가기</h2>
      <div class="flex gap-[20px] items-center overflow-x-auto">
        <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
          <img :src="images.image22" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
          <img :src="images.image27" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
          <img :src="images.image20" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
          <img :src="images.image24" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="w-[48px] h-[48px] flex-shrink-0 rounded-[16px] overflow-hidden">
          <img :src="images.image35" alt="" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>

    <!-- 하단 네비게이션 -->
    <Navigation />
  </div>
</template>

<script setup>
import { images } from '../constants/images';
import Navigation from './Navigation.vue';
import MenuTab from './MenuTab.vue';
import GnbMain from './GnbMain.vue';
import StatusBar from './StatusBar.vue';
import MenuApp from './MenuApp.vue';
</script>
