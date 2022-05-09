function checkSymbol(sym) {
    return ((sym >= 'a') && (sym <= 'z'));
}

function validateString(str) {
    return str.value.length > 0;
}

function validateWords(words) {
    let result = true;
    let id = 0;
    for (let x = 0; x < words.length; x++)
        if (!checkSymbol(words[x][0])) {
            result = false;
            id = x;
            break;
        }
    return [result, id];
}
function checkSymbolFormat(sym, symFormat) {
    if ((symFormat == 'c') && (sym >= '0' && sym <= '9'))
        return true;
    else if ((symFormat == 'b') && (sym >= 'a' && sym <= 'z')) 
        return true;
    else if ((symFormat == 'i') && (sym >= '0' && sym <= '9') && sym % 2 == 0) 
        return true;
    else if ((symFormat == 'j') && (sym >= '0' && sym <= '9') && sym % 2 == 1) 
        return true;
    return false;
}
function checkWordFormat(word, format) {
    if (word.length != format.length)
        return false;

    for (let x = 0; x < word.length; x++)
        if (!checkSymbolFormat(word[x], format[x]))
            return false;
    return true;
}

function checkWordsFormat(words, format) {
    for (let x = 0; x < words.length; x++)
        if (!checkWordFormat(words[x], format))
            return false;
    return true;
}
function checkMessage(str, id, format) {
    let result = false;
    let mass = [];
    let errorMessage = '';
    if (validateString(str)) {
        mass = str.value.split(' ');
        if (checkWordsFormat(mass, format)) {
            result = true;
        } else {
            errorMessage += 'Массив ' + id + ' имеет неподходящий формат. Формат должен быть вида ' + format +
                '. Здесь c - цифра, b - буква, i - чётная цифра, i - чётная цифра\n\n';
        }
    } else
        errorMessage += 'Массив ' + id + ' не должен быть\n\n';

    return [mass, result, errorMessage];
}
function getStrings(string1Id, string2Id, outStringId, format) {
    let a = document.getElementById(string1Id);
    let b = document.getElementById(string2Id);
    let outResult = document.getElementById(outStringId);
    let result = true;

    let result1 = checkMessage(a, 1, format);
    if (result1[1] == false) result = false;
    let result2 = checkMessage(b, 2, format);
    if (result2[1] == false) result = false;

    if (result == false)
        alert(result1[2] + result2[2]);

    return [result1[0], result2[0], outResult, result];
}
function countElements(mass, element) {
    let count = 0;
    for (let x = 0; x < mass.length; x++)
        if (mass[x] == element) count++;
    return count;
}
function removeRepetitions(mass) {
    for (let x = 0; x < mass.length; x++)
        for (let y = 0; y < mass.length; y++)
            if (y != x && mass[y] == mass[x]) {
                mass.splice(y, 1);
                y--;
            }
    return mass;
}
function addition(mass1, mass2) {
    let mass3 = mass1;
    removeRepetitions(mass3);
    for (let x = 0; x < mass3.length; x++)
        if (countElements(mass2, mass3[x]) > 0) {
            mass3.splice(x, 1);
            x--;
        }
    return mass3;
}
function intersects(mass1, mass2) {
    let mass3 = [];
    for (let x = 0; x < mass1.length; x++)
        for (let y = 0; y < mass2.length; y++)
            if (mass1[x] == mass2[y]) {
                mass3.push(mass1[x]);
                break;
            }

    removeRepetitions(mass3);
    return mass3;
}
function symmetricDifference(mass1, mass2) {
    let mass3 = [];
    for (let x = 0; x < mass1.length; x++)
        if (countElements(mass2, mass1[x]) == 0)
            mass3.push(mass1[x]);

    for (let x = 0; x < mass2.length; x++)
        if (countElements(mass1, mass2[x]) == 0)
            mass3.push(mass2[x]);
    return mass3;
}
function merge(mass1, mass2) {
    return removeRepetitions(mass1.concat(mass2));
}
function calculateAddition() {
    let data = getStrings('mass1', 'mass2', 'outResult', format);
    if (data[3] == false) return;

    let mass_1 = data[0];
    let mass_2 = data[1];
    let outResult = data[2];

    
    outResult.innerText = addition(mass_1, mass_2);
}

function calculateIntersects() {
    let data = getStrings('mass1', 'mass2', 'outResult', format);
    if (data[3] == false) return;

    let mass_1 = data[0];
    let mass_2 = data[1];
    let outResult = data[2];

    
    outResult.innerText = intersects(mass_1, mass_2);
}

function calculateSymmetricDifference() {
    let data = getStrings('mass1', 'mass2', 'outResult', format);
    if (data[3] == false) return;

    let mass_1 = data[0];
    let mass_2 = data[1];
    let outResult = data[2];

    outResult.innerText = symmetricDifference(mass_1, mass_2);
}
function calculateMerge() {
    let data = getStrings('mass1', 'mass2', 'outResult', format);
    if (data[3] == false) return;

    
    data[2].innerText = merge(data[0], data[1]);
}


var format = 'bcii';

function calculate(id) {
    let data = getStrings('mass1', 'mass2', 'outResult', format);
    if (data[3] == false) return;

    switch (id) {
        case 0:
            data[2].innerText = merge(data[0], data[1]); 
            break;
        case 1:
            data[2].innerText = symmetricDifference(data[0], data[1]); 
            break;
        case 2:
            data[2].innerText = intersects(data[0], data[1]); 
            break;
        case 3:
            data[2].innerText = addition(data[0], data[1]); 
            break;
        case 4:
            data[2].innerText = addition(data[1], data[0]); 
            break;
        default:
            return;
            break;
    }

    return;
}