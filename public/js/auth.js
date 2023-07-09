import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
import { getAuth, signInWithPopup, FacebookAuthProvider, GoogleAuthProvider } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyDAQy6rbffgbaMZOmQFrM7GUzYZXDIUHGk",
    authDomain: "supply-partners-36d72.firebaseapp.com",
    projectId: "supply-partners-36d72",
    storageBucket: "supply-partners-36d72.appspot.com",
    messagingSenderId: "660668213638",
    appId: "1:660668213638:web:1b739cd8d672c07dc66407"
};

const app = initializeApp(firebaseConfig);

async function signInWithProvider(provider) {
    try {
        const authInstance = getAuth();
        const result = await signInWithPopup(authInstance, provider);
        const user = result.user;
        const userData = { name: user.displayName, email: user.email, provider: provider.providerId.toUpperCase() };
        saveSessionUser(userData);
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Error de autenticación',
            text: 'No se pudo autenticar. Por favor, intenta usar otro proveedor.'
        });
    }
}

const signInGmailButton = document.getElementById("sign-in-gmail");
signInGmailButton.onclick = () => signInWithProvider(new GoogleAuthProvider());

const signInFacebookButton = document.getElementById("sign-in-facebook");
signInFacebookButton.onclick = () => signInWithProvider(new FacebookAuthProvider());


function saveSessionUser(userData) {
    fetch("index.php?controller=auth&action=save", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(userData),
    })
        .then((response) => {
            if (response.ok) {
                console.log("Datos enviados correctamente");
                window.location.href = "index.php";
            } else {
                throw new Error("Error al enviar los datos");
            }
        })
        .catch((error) => {
            console.error("Error:", error.message);
            Swal.fire({
                icon: 'error',
                title: 'Error de servicio',
                text: error.message
            });
        });
}
