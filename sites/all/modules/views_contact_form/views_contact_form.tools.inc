<?php

function _views_contact_form_encrypt($data) {
  return base64_encode(encrypt(serialize($data)));
}

function _views_contact_form_decrypt($data) {
  return unserialize(decrypt(base64_decode($data)));
}

