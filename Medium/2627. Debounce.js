/**
 * @param {Function} fn
 * @param {number} t milliseconds
 * @return {Function}
 */
let t = 50
let calls = [
  {"t": 50, inputs: [1]},
  {"t": 75, inputs: [2]}
]

var debounce = function(fn, t) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => fn.apply(this, args), t);
    }
};

/**
 * const log = debounce(console.log, 100);
 * log('Hello'); // cancelled
 * log('Hello'); // cancelled
 * log('Hello'); // Logged at t=100ms
 */