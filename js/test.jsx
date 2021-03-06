import React from "react";

const SpinnerPage = () => {
    return (
        <>
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-border text-success" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-border text-danger" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-border text-warning" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-border text-info" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </>
    );
}

export default SpinnerPage;