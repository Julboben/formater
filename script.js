<script>
const texts = ['web', 'design', 'reklame'];
const speed = 100;
const pause = 2200; // the longer delay between text direction changes

function typeWriter(i=0, index=1, direction=1) {
  let displayed = texts[i].slice(0, index);
  document.querySelector("#bureauType").textContent = displayed;

  if (displayed.length >= texts[i].length) { // start removing after pause
    setTimeout(() => typeWriter(i, index-1, -1), pause);
  } else if (displayed.length === 0) { // go to next text after pause
    setTimeout(() => typeWriter((i+1) % texts.length), pause);
  } else { // continue in the current direction
    setTimeout(() => typeWriter(i, index+direction, direction), speed);
  }
}

typeWriter();
</script>