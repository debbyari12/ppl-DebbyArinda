<?php
//File: Validator php
function validateNama($nama) {
    if (!is_string($nama)) {
        throw new InvalidArgumentException("nama hrus berupa huruf");
    }
    if ($nama < 0) {
        throw new InvalidArgumentException("nama tidak boelh kosng");
    }
    return true;
}