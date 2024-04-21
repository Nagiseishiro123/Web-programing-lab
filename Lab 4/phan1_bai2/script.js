// Function to set a cookie
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  const expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  console.log("All Cookies:", document.cookie);
}

// Function to get a cookie value by name
function getCookie(cname) {
  const name = cname + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}



// Function to display all cookies
function listAllCookies() {
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  let cookiesString = "";
  for (let i = 0; i < ca.length; i++) {
    cookiesString += ca[i] + "\n";
  }
  document.getElementById("cookiesContainer").textContent = cookiesString;
}

// Function to add a cookie
function addCookie() {
  const cname = document.getElementById("cname").value;
  const cvalue = document.getElementById("cvalue").value;
  const exdays = document.getElementById("exdays").value;
  
  setCookie(cname, cvalue, exdays);
}

// Function to edit a cookie
function editCookie() {
  const cname = document.getElementById("cname").value;
  const cvalue = document.getElementById("cvalue").value;
  const exdays = document.getElementById("exdays").value;
  
  // Check if the cookie exists before editing
  if (getCookie(cname) !== "") {
    setCookie(cname, cvalue, exdays);
  } else {
    alert("Cookie not found. Cannot edit.");
  }
}

// Function để xóa cookie
function deleteCookie() {
  const cname = document.getElementById("cname").value;
  
  // Kiểm tra xem cookie tồn tại trước khi xóa
  if (getCookie(cname) !== "") {
    document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    console.log("Cookie đã được xóa:", cname);
  } else {
    alert("Cookie không tồn tại. Không thể xóa.");
  }
}
