document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll(".faq-question");

    questions.forEach(function (question) {
        question.addEventListener("click", function () {
            const answer = this.nextElementSibling;
            const icon = this.querySelector(".faq-icon");

            // Kui vastus on juba nähtav, siis sulge see
            if (answer.classList.contains("show")) {
                answer.classList.remove("show");
                answer.classList.add("hide");
                answer.style.opacity = "0"; // Muudame nähtamatuks
                answer.style.maxHeight = "0"; // Peidame vastuse

                icon.classList.remove("active");
            } else {
                // Kui vastus pole nähtav, siis avame selle
                document.querySelectorAll(".faq-answer").forEach(a => {
                    a.classList.remove("show");
                    a.classList.add("hide");
                    a.style.opacity = "0";
                    a.style.maxHeight = "0"; // Sulge kõik muud vastused
                });

                // Sulge kõik muud ikoonid
                document.querySelectorAll(".faq-icon").forEach(i => {
                    i.classList.remove("active");
                });

                // Ava valitud vastus
                answer.classList.add("show");
                answer.style.opacity = "1";
                answer.style.maxHeight = "100vh"; // Avame vastuse

                icon.classList.add("active");
            }
        });
    });
});