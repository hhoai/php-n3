const login = document.querySelector(".welcome-login");
const log = document.querySelector(".welcome-log");

const emptyCart = document.querySelector(".empty-cart");
const cart = document.querySelector(".cart-content");

const isSignIn = true;
if (isSignIn) {
  login.classList.remove("hide");
  log.classList.add("hide");
}

const isEmptyCart = true;
if (isEmptyCart) {
  emptyCart.classList.add("hide");
  cart.classList.remove("hide");
}
