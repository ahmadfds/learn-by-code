function quickSort(arr, low, heigh) {
    if(low < heigh) {
        let pi = partition(arr, low, heigh);

        quickSort(arr, low, pi - 1);
        quickSort(arr, pi + 1, heigh);
    }
}

function partition(arr, low, heigh) {
    console.log('partitioning => ', (heigh-low) + 1, arr);
    let pivotInx = heigh;
    let i = low - 1;
    for(let j=low; j<heigh; j++) {
        if(arr[j] < arr[pivotInx]) {
            swap(arr, ++i, j);
            //console.log('i='+i, 'j='+j, arr);
        }
    }
    swap(arr, ++i, pivotInx);
    return i;
}

function swap(arr, i, j) {
    [arr[i], arr[j]] = [arr[j], arr[i]];
}

let arr = [9,10,12,3,59,6,8,9,8,2,3,8];
quickSort(arr, 0, arr.length - 1);

console.log('FINAL RESULT ==> ', arr);