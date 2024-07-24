export default {
    mounted(el, binding) {
        if(el.src == binding.value) return;
        el.onerror = () => el.src = binding.value;
    }
};
  