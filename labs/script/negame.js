const userAvatarElem = document.querySelector('.user_avatar');
const userNameElem = document.querySelector('.user_name');
const userLocationElem = document.querySelector('.user_location');

const defaultAvatar = 'https://i1.sndcdn.com/avatars-000562698696-0ftnrp-t500x500.jpg';

userAvatarElem.src=defaultAvatar;



const fetchUserData = userName => {
    return fetch(`https://api.github.com/users/${userName}`)
        .then(response => response.json());

}        

const renderUserData = userData => {
    // console.log(userData);
    const { avatar_url, name, location } = userData;
    userAvatarElem.src = avatar_url;
    userNameElem.textContent = name;
    userLocationElem.textContent = location
        ? `from ${location}`
        : '';
}







const showUserBtnElem = document.querySelector('.name-form_btn');
const userNameInputElem = document.querySelector('.name-form_input');


const onSearchUser = () => {
    const userName = userNameInputElem.value;
    fetchUserData(userName)
        .then(userData => renderUserData(userData));
};

showUserBtnElem.addEventListener('click', onSearchUser);