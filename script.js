let currentSlide = 0;

function startSlider() {
  let imageCount = document.querySelectorAll("img");
  let images = document.querySelector("ul");

  if (imageCount.length === 0) {
    imageCount = document.querySelectorAll("img");
    images.style.transform = `translateX(0px)`;
    return;
  }

  images.style.transform = `translateX(-${currentSlide * 550}px)`;

  // Remove the active class from all dots
  let dots = document.querySelectorAll(".dot");
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });

  // Add the active class to the current dot
  dots[currentSlide].classList.add("active");

  if (currentSlide === imageCount.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
}

setInterval(() => {
  startSlider();
}, 3000);



// Handling login form
document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault();
  var Your Name = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var loginError = document.getElementById("loginError");

  // Dummy authentication (replace with actual authentication logic)
  if (username === "username" && password === "password") {
    alert("Login successful!");
    // Redirect to dashboard or other page
  } else {
    loginError.textContent = "Invalid Your Name or password";
  }
});

// Handling registration form
document.getElementById("register").addEventListener("register", function(event) {
  event.preventDefault();
  var Your Name = document.getElementById("username").value;
  var Phone Number = document.getElementById("Phone").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;
  var Invite Code = document.getElementById("Invite Code").value;
  var registerError = document.getElementById("registerError");


  // Dummy validation (replace with actual validation logic)
  if (!Your Name || !Phone Number || !password || !confirmPassword) {
    registerError.textContent = "All fields are required";
  } else if (password !== confirmPassword) {
    registerError.textContent = "Passwords do not match";
  } else {
    // Dummy registration (replace with actual registration logic)
    alert("Account created successfully!");
    // Redirect to login page or other page
  }
});


function copy(){
const copyButtons=document.querySelectorAll(".copy_button");

const successfullyCopy = (button)=>{
  button.textContent = "Copied";
  button.disabled = true;

  setTimeout(()=>{
   button.textContent = "Copy";
   button.disabled = true;
}, 1500);

}

copyButtons.forEach((button)=>{
button.addEventListener("click", async ()=> {
   const parentEl = button.parentElement;
   const text=parentEl.querySelector("input.Text_CopBtn");

   try {
     await navigator.clipboard.writeText(text.value)
     successfullyCopy(button);
   } catch {
    text.select();
    document.execCommand("copy");

    text.setSelectionRange(0, 0);
    text.blur();

    successfullyCopy(button);

   }
  
})

}
)
}












<script>
const fileInput = document.getElementById('fileInput');
const profileImage = document.getElementById('profileImage');

fileInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      profileImage.src = e.target.result;
    }
    reader.readAsDataURL(file);
  }
});
</script>