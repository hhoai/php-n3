const payment = document.querySelector(".payment-container");
const paymentBtn = document.querySelector(".payment-btn");
const success = document.querySelector(".successful");

paymentBtn.addEventListener("click", (event) => {
  payment.classList.add("hide");
  success.classList.remove("hide");
});

console.log(payment);
