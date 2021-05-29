function search(sortedList, searchFor) {
    return binarySearch(sortedList, searchFor, 0, sortedList.length - 1);
}

function binarySearch(sortedList, searchFor, leftInx = 0, rightInx = 0) {
    if(leftInx <= rightInx) {
        middleInx = Math.floor((leftInx + rightInx) / 2);
        console.log(leftInx, middleInx, rightInx);
        if(sortedList[middleInx] === searchFor) {
            return middleInx;
        } else if(sortedList[middleInx] > searchFor) {
            return binarySearch(sortedList, searchFor, leftInx, middleInx - 1);
        } else {
            return binarySearch(sortedList, searchFor, middleInx + 1, rightInx);
        }
    }
    return -1;
}

let searchInx = search([0, 1, 2, 3, 4, 5, 6, 7, 8], 9);
console.log(searchInx);