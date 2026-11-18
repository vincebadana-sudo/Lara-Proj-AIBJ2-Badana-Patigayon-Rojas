const counters = document.querySelectorAll(".counter");

counters.forEach(function (counter) {
    const target = Number(counter.dataset.target);
    const step = Math.ceil(target / 100);
    let count = 0;

    const timer = setInterval(function () {
        count = count + step;

        if (count >= target) {
            count = target;
            clearInterval(timer);
        }

        counter.textContent = count + "+";
    }, 20);
});
