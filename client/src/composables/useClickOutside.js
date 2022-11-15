import { onBeforeUnmount, onMounted } from "vue";

export default function useClickOutside(ref, callback) {
  if (!ref) return;

  let counter = 0;
  const listener = (event) => {
    if (event.target !== ref.value && event.composedPath().includes(ref.value)) return;

    if (counter === 0) {
      counter++;
      return;
    }

    if (typeof callback === "function") callback();
  };

  onMounted(() => window.addEventListener("click", listener));
  onBeforeUnmount(() => window.removeEventListener("click", listener));

  return { listener };
}