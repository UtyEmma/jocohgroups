export default {
    mounted(el, binding) {
        const fallbackSrc = binding.value;
        
        el.onerror = () => {
            el.src = fallbackSrc;
        };
    }
};
  