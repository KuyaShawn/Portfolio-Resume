const colors = ["#FFFFFF", "#E6E6E6", "#CCCCCC", "#B3B3B3", "#999999"];

const numBalls = 30;
const balls = [];
let ul = document.querySelector('#background');
ul.setAttribute('aria-hidden','true');

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("li");
  ball.classList.add("ball");
  ball.setAttribute('style', 'display: block;');
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;

  balls.push(ball);
  ul.append(ball);
}

balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12,
  };

  let anim = el.animate(
    [
      { transform: "translate(-1, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` },
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out",
    }
  );
});
