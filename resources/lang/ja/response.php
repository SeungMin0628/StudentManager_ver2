<?php
/**
 * Title: 응답 메시지 언어팩 <한국어>
 * User: Seungmin Lee
 * Date: 6/11/2018
 * Time: 10:53 AM
 */

return [
    // 공통: CRUD 메시지
    'insert_success'        => ':element 등록에 성공하였습니다.',
    'insert_failed'         => ':element 등록에 실패하였습니다.',
    'update_success'        => ':element 수정에 성공하였습니다.',
    'update_failed'         => ':element 수정에 실패하였습니다.',
    'delete_success'        => ':element 삭제에 성공하였습니다.',
    'delete_failed'         => ':element 삭제에 실패하였습니다.',

    // 공통: 에러
    'data_not_found'        => '데이터를 찾을 수 없습니다.',
    'wrong_format'          => '데이터 형식이 맞지 않습니다.',
    'not_authorized'        => '허가되지 않은 접근입니다.',
    'no_authority'          => "해당 :contents에 접근할 권한이 없습니다.",

    // 01. 출석 메시지
    // 등교

    // 하교
    'sign_out_error_no_sign_in' => '최근 하교 내역이 존재합니다. (:sign_out_time)',
    'sign_out_error_no_data'    => '등교 내역이 없습니다.',
    'sign_out_error_etc'        => "하교 인증에 실패하였습니다.",

    // 지각|결석|조퇴

    // 02. 학업 관련 메시지

    // 03. 시스템 관리 메시지
    'schedule_already_exists'   => "지정 기간 이내에 이미 일정이 존재합니다.",
];