document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll(".faq-question");

    questions.forEach(function (question) {
        question.addEventListener("click", function () {
            const answer = this.nextElementSibling;
            const icon = this.querySelector(".faq-icon");

            const isOpen = answer.classList.contains("show");

            // Sulge kõik teised vastused
            document.querySelectorAll(".faq-answer").forEach(a => {
                a.classList.remove("show");
            });

            // Lülita kõik ikoonid välja
            document.querySelectorAll(".faq-icon").forEach(i => {
                i.classList.remove("active");
            });

            // Kui see polnud avatud, ava nüüd
            if (!isOpen) {
                answer.classList.add("show");
                icon.classList.add("active");
            }
        });
    });
});