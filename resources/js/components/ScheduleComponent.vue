<template>
    <div class="card">
        <form method="post" action="captcha-test">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Appointment date</span>
                </div>
                    <input type="date" class="form-control">
                </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Company Name</span>
                </div>
                    <input type="name" class="form-control">
            </div>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Contact Email</span>
                </div>
                    <input type="name" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Contact Phone Number</span>
                </div>
                    <input type="number" class="form-control">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Contact name</span>
                </div>
                    <input type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Project Budget</span>
                </div>
                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Project Description</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <slot></slot>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <p><button type="submit" class="btn btn-primary">Submit Appointment</button></p>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {

}
</script>