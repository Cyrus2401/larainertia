export function useSwallSuccess(message){

    Swal.fire({
        toast: true,
        icon: "success",
        title: message,
        animation: false,
        position: 'top-end',
        showConfirmation: false,
        timer: 4000
    })

}

export function useSwallError(message){

    Swal.fire({
        toast: true,
        icon: "error",
        title: message,
        animation: false,
        position: 'top-end',
        showConfirmation: false,
        timer: 4000
    })

}