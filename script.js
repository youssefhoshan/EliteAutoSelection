const text = document.querySelector('.text');
const strText = text.textContent;
const splitText = strText.split('');

text.textContent = '';

splitText.forEach((letter, index) => {
  setTimeout(() => {
    text.textContent += letter;
  }, 100 * index);
});
