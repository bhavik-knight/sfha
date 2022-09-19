let lastInterval, counter = 5;

const greet = delay => {
    // if counter is 5, we must stop the loop
    if (counter === 5) {
        // to stop the loop
        clearInterval(lastInterval);

        // for the looping construct
        const lastInterval = setInterval(() => {
            console.log(`Hello World. ${delay}`);
            greet(delay + 100);
        }, delay);

        // set counter to 0
        counter = 0;
    }

    counter++;
}

greet(1);
