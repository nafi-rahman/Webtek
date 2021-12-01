function isValidH(regForm) {
            const username = regForm.username.value;
            const email = regForm.email.value;
            const password = regForm.password.value;


            if (username === "" || email === "" || password === "") {
                document.getElementById("message").innerHTML = "Please fill up the form properly Home(JS)";
                return false;
            }

            return true;
        }
        