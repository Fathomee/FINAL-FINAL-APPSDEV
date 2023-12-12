const topViews = document.querySelector('.top-view');
const plus = document.querySelector('.plus');
const minus = document.querySelector('.minus');
const percent = document.querySelector('.percent');

//function that can be used for adding value
function changeScale(amount) {

 //TF is this
  const currentScale = parseFloat(getComputedStyle(topViews).transform.split(',')[3]);
  const newScale = currentScale + amount;

  // Limit scale to 0.5 to 1 ??
  const limitedScale = Math.min(Math.max(newScale, 0.5), 1);

  // Display percentage in console or can be in page
  const percentage = ((limitedScale - 0.5) / 0.5) * 100;
  percent.innerHTML = `${percentage.toFixed(0)}%`;

  // Apply the new scale
  topViews.style.transform = `scale(${limitedScale})`;
}

//if button is click do the function above and input a corresponding value
plus.addEventListener('click', () => {
  changeScale(0.05);
});

minus.addEventListener('click', () => {
  changeScale(-0.05);
});
