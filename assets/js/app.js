/* ===============================
   MOBILE MENU
================================ */

function toggleMenu() {

    const navbar = document.getElementById("navbar");

    navbar.classList.toggle("active");

}


/* ===============================
   CHAT
================================ */

function openChat() {

    const chatBox = document.getElementById("chatBox");

    chatBox.classList.add("active");

}


function closeChat() {

    const chatBox = document.getElementById("chatBox");

    chatBox.classList.remove("active");

}


/* ===============================
   SEND CHAT MESSAGE
================================ */

function sendMessage() {

    const input = document.getElementById("messageInput");

    const message = input.value.trim();

    if (message === "") {

        return;

    }


    const chatMessages =
        document.getElementById("chatMessages");


    const newMessage =
        document.createElement("div");


    newMessage.className =
        "message user-message";


    newMessage.textContent =
        message;


    chatMessages.appendChild(newMessage);


    input.value = "";


    chatMessages.scrollTop =
        chatMessages.scrollHeight;


    /*
       Temporary automatic response.

       Later PHP + MySQL will replace this
       with the real admin chat system.
    */

    setTimeout(function() {

        const response =
            document.createElement("div");

        response.className =
            "message admin-message";

        response.textContent =
            "Murakoze! Admin wa Kigali Luxury Furniture aragusubiza vuba. 😊";

        chatMessages.appendChild(response);

        chatMessages.scrollTop =
            chatMessages.scrollHeight;

    }, 1200);

}


/* ===============================
   ENTER KEY
================================ */

const messageInput =
    document.getElementById("messageInput");

if (messageInput) {

    messageInput.addEventListener(
        "keydown",
        function(event) {

            if (event.key === "Enter") {

                sendMessage();

            }

        }
    );

}


/* ===============================
   SCROLL ANIMATION
================================ */

const observer =
    new IntersectionObserver(

        function(entries) {

            entries.forEach(function(entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("show");

                }

            });

        },

        {
            threshold: 0.15
        }

    );


document
    .querySelectorAll(".product-card, .luxury-content")
    .forEach(function(element) {

        observer.observe(element);

    });