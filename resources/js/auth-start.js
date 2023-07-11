ethereumClient.watchAccount((userAccount) => {
    if (userAccount.address) {
        console.log(userAccount.address);
        window.location.href = route("user.store", {
            wallet: userAccount.address,
        });
    }
});
