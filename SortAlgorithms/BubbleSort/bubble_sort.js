function bubbleSort(arr) {
    for(let i=0; i < arr.length - 1; i++) {
        for(let j=0; j < arr.length - i - 1; j++) {
            if(arr[j] >= arr[j+1]) {
                [arr[j], arr[j+1]] = [arr[j+1], arr[j]];
            }
        }
    }
}

let arr = [5, 55, 6, 32, 12, 4, 8, 6, 78, 7, 9, 66, 48];
bubbleSort(arr);
console.log(arr);