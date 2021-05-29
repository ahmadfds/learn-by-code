function search(sortedList, searchFor) {
    let leftInx = 0;
    let rightInx = sortedList.length - 1;
    let middleInx = 0;
    while(leftInx <= rightInx) {
        middleInx = Math.floor((leftInx + rightInx) / 2);
        console.log(leftInx, middleInx, rightInx);
        if(sortedList[middleInx] === searchFor) {
            return middleInx;
        } else if(sortedList[middleInx] > searchFor) {
            rightInx = middleInx-1;
        } else {
            leftInx = middleInx+1;
        }
    }
    return -1;
}

let searchInx = search([0, 1, 2, 3, 4, 5, 6, 7, 8], 9);
console.log(searchInx);