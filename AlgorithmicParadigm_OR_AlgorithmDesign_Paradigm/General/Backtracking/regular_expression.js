var analysedPattern = [];
var inputString = '';

/**
 * @param {string} s
 * @param {string} p
 * @return {boolean}
 */
var isMatch = function(s, p) {
    analysedPattern = analysePattern(p);
    inputString = s;

    let patternMatch = backtrackMatch(0, 0);
    console.log(patternMatch);
    return patternMatch === inputString;

};

function analysePattern(pattern) {
    let analysedPattern = [];
    let preChar = null;
    for(let i=0; i < pattern.length; i++) {
        if(preChar === null) {
            preChar = pattern[i];
            if(preChar === '*') {
                throw 'Syntax Error';
            }
        } else {
            if(pattern[i] === '*') {
                analysedPattern.push('*'+preChar);
                preChar = null;
            } else {
                analysedPattern.push(preChar);
                preChar = pattern[i];
            }
        }
    }
    if(preChar) {
        analysedPattern.push(preChar);
    }

    return analysedPattern;
}


// return -1 => rejected
// return char => matchedChar
function backtrackMatch(patternSeeker, inputSeeker) {
    let matchedChar = '';
    let childResult = null;
    if( checkPatternEOF(patternSeeker, inputSeeker) ) {
        return ''; // pattern has completely matched (ACCEPT)
    } else if(inputSeeker > inputString.length) {
        return -1; // pattern has not completely matched (REJECT)
    }


    if(analysedPattern[patternSeeker][0] === '*') {
        if(isAstristCharMatch(patternSeeker, inputSeeker)) {
            matchedChar = inputString[inputSeeker] === undefined ? '' : inputString[inputSeeker];
            childResult = backtrackMatch(patternSeeker, inputSeeker+1);
            if(childResult === -1) {
                matchedChar = '';
                childResult = backtrackMatch(patternSeeker+1, inputSeeker);
            }
        } else {
            childResult = backtrackMatch(patternSeeker+1, inputSeeker);
        }
        if(childResult !== -1) {
            return matchedChar+childResult;
        }

    } else if( isSingleCharMatch(patternSeeker, inputSeeker) ) {
        matchedChar =  inputString[inputSeeker];
        childResult = backtrackMatch(patternSeeker+1, inputSeeker+1);
        if(childResult !== -1) {
            return matchedChar+childResult;
        }

    }

    return -1; // (REJECT)

}

function checkPatternEOF(patternSeeker, inputSeeker) {
    return analysedPattern[patternSeeker] === undefined ||
        (inputString[inputSeeker] === undefined &&
            patternSeeker === analysedPattern.length - 1 &&
            analysedPattern[patternSeeker][0] === '*');
}

function isSingleCharMatch(patternSeeker, inputSeeker) {
    return inputString[inputSeeker] !== undefined &&
        (analysedPattern[patternSeeker][0] === '.' ||
            analysedPattern[patternSeeker][0] === inputString[inputSeeker]);
}

function isAstristCharMatch(patternSeeker, inputSeeker) {
    return analysedPattern[patternSeeker][1] === inputString[inputSeeker] ||
        analysedPattern[patternSeeker][1] === '.';
}

