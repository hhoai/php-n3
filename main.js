
const formWrapper = document.querySelector(".form-wrapper");
const signupButton = document.querySelector(".signup");
const loginButton = document.querySelector(".login");
const outButton = document.querySelector(".out");
const switchButton = document.querySelectorAll(".auth-form__switch-btn");
const searchSuggest = document.querySelector(".search-suggest");
const searchValue = document.querySelector(".ip-search");
const searchBtn = document.querySelector(".search-btn");

let nextForm = "";
let searchInput = [];


const toggleShow = (el, status) => {
  el.style.display = status;
};

const openForm = (type) => {
  formWrapper.classList.remove("hide");
  const remainingKey = type === "sign-up" ? "sign-in" : "sign-up";
  const authForm = document.querySelector(`.auth-form__container .${type}`);
  const remainingForm = document.querySelector(
    `.auth-form__container .${remainingKey}`
  );
  toggleShow(authForm, "block");
  toggleShow(remainingForm, "none");
};

signupButton.onclick = function (e) {
  openForm("sign-up");
  nextForm = "sign-in";
};

loginButton.onclick = function (e) {
  openForm("sign-in");
  nextForm = "sign-up";
};

outButton.onclick = function (e) {
  formWrapper.classList.add("hide");
};

for (const button of switchButton) {
  button.onclick = () => {
    openForm(nextForm);
    nextForm = nextForm === "sign-up" ? "sign-in" : "sign-up";
  };
}

let flag = 0;
searchBtn.onclick = () => {
  searchInput.push(searchValue.value);
  console.log(searchInput);

  for (var i = 0; i < searchInput.length; i++) {
    if (searchInput[i] != searchValue.value) {
      flag = 1;
    }
  }
  if (flag === 1) {
    var search = document.createElement("li");
    search.innerText = searchValue.value;
    search.className = "searched";
    searchSuggest.appendChild(search);

    console.log(searchValue.value);
  }

  searchSuggest.classList.add("hide");

  console.log("asd");
};

searchSuggest.classList.add("hide");

searchValue.onclick = () => {
  searchSuggest.classList.remove("hide");
};

const handleChangeResult = () => {
  // const arr = document.querySelectorAll("searched")
  // arr.map(i => i.classList.add("hide"))
searchSuggest.classList.add("hide");

};
