function isValidH(LogForm) {
            const username = LogForm.username.value;
            const password = LogForm.password.value;


            if (username === "" ||  password === "") {
                document.getElementById("message").innerHTML = "Please fill up the form properly login(JS)";
                return false;
            }

            return true;
        }
        