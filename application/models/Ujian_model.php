<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian_model extends CI_Model
{
    public function get_questions_with_options()
    {
        $this->db->select('QUESTION.ID AS QUESTION_ID, QUESTION.QUESTION_TEXT, OPTIONS.ID AS OPTION_ID, OPTIONS.OPTION_TEXT');
        $this->db->from('QUESTION');
        $this->db->join('OPTIONS', 'OPTIONS.QUESTION_ID = QUESTION.ID');
        $query = $this->db->get();

        $result = array();
        foreach ($query->result() as $row) {
            $result[$row->QUESTION_ID]['ID'] = $row->QUESTION_ID;
            $result[$row->QUESTION_ID]['QUESTION_TEXT'] = $row->QUESTION_TEXT;
            $result[$row->QUESTION_ID]['OPTIONS'][] = array(
                'ID' => $row->OPTION_ID,
                'OPTION_TEXT' => $row->OPTION_TEXT,
            );
        }

        // Mengubah array asosiatif menjadi array numerik
        $result = array_values($result);

        return $result;
    }
}
