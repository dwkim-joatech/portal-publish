<div class="bg-white border-[#ddd] border-b border-solid content-stretch flex flex-col items-start justify-end pt-[10px] relative overflow-hidden w-full" data-name="menu/tab">
  <div class="flex flex-nowrap gap-[10px] items-center overflow-x-auto hide-scrollbar relative px-[20px] w-full min-w-0" data-name="tab">
    <x-tab :active="true" additionalClass="font-bold" label="중고장터" />
    <x-tab additionalClass="text-[#999]" label="쇼핑몰" />
    <x-tab additionalClass="text-[#999]" label="입찰정보" />
    <x-tab additionalClass="text-[#999]" label="자료실" />
    <x-tab additionalClass="text-[#999]" label="공지사항" />
    <x-tab additionalClass="text-[#999]" label="조아테크소식" />
    <x-tab additionalClass="text-[#999]" label="업계소식" />
    <x-tab additionalClass="text-[#999]" label="LPG단가동향" />
  </div>
</div>

<script>
  (function() {
    const container = document.querySelector('[data-name="menu/tab"] [data-name="tab"]');
    if (!container) return;

    const items = Array.from(container.querySelectorAll('[data-tab-item]'));
    if (items.length === 0) return;

    const setActive = (activeItem) => {
      items.forEach((item) => {
        const label = item.querySelector('[data-tab-label]');
        if (!label) return;

        if (item === activeItem) {
          item.classList.add('font-bold');
          item.classList.remove('text-[#999]');
          label.classList.add('border-b-[3px]', 'border-black', 'text-black');
        } else {
          item.classList.remove('font-bold');
          item.classList.add('text-[#999]');
          label.classList.remove('border-b-[3px]', 'border-black', 'text-black');
        }
      });
    };

    const initialActive = items.find((item) => {
      const label = item.querySelector('[data-tab-label]');
      return label && label.classList.contains('border-b-[3px]');
    }) || items[0];

    setActive(initialActive);

    items.forEach((item) => {
      item.addEventListener('click', () => setActive(item));
    });
  })();
</script>
