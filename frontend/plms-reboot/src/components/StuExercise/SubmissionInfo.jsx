import { Box, Button, Stack, Typography } from "@mui/material"
import { statusProperties, markingBgColor } from "@/utils";
import { useAtom } from 'jotai';
import { userAtom } from '@/store/store';
import { useParams } from "react-router-dom";
import KeyboardBackspaceIcon from '@mui/icons-material/KeyboardBackspace';
import MyCodeEditor from "@/components/_shared/MyCodeEditor";
import TerminalBlock from "@/components/_shared/TerminalBlock";
import MyDiff from "@/components/_shared/MyDiff";
import moment from 'moment';

const SubmissionInfo = ({ submissionList, selectedSubmission, insPage = false }) => {
  const [user,] = useAtom(userAtom)
  const { chapterId, itemId, studentId } = useParams();
  const submission = submissionList[selectedSubmission.value] || null;

  if (submission === null) {
    selectedSubmission.setValue(null);
  } else {
    const { message, color } = statusProperties[submission.status];

    return (
      <Box>
        {!insPage &&
          <Stack direction="row" spacing="20px" alignItems="center" sx={{ position: "sticky", top: 0 }} >
            <Button onClick={() => selectedSubmission.setValue(null)} startIcon={<KeyboardBackspaceIcon />} sx={{ color: "white" }} >Back</Button>
          </Stack>
        }
        <Stack sx={{ paddingX: "20px" }} >
          <Stack direction="row" justifyContent="space-between" alignItems="center" marginY="20px">
            <Typography variant="h6" sx={{ fontWeight: "bold" }} >Submission #{selectedSubmission.value + 1}</Typography>
          </Stack>

          <Stack spacing="20px" padding="10px" >
            <Stack direction="row" spacing="10px" alignItems="baseline" justifyContent="space-between" >
              <Stack direction="row" spacing="10px" alignItems="baseline">
                <Box sx={{ borderRadius: "50vw", bgcolor: color, padding: "2px 10px" }} >
                  <Typography  >{message}</Typography>
                </Box>
                <Typography sx={{ fontSize: "14px" }} >
                  Submitted at {moment(submission.time_submit).format('MMM D, YYYY HH:mm')}
                </Typography>
              </Stack>

              <Box sx={{ padding: "4px 15px", borderRadius: "8px", ...markingBgColor[submission.marking] }} >
                <Typography>{submission.marking}/2</Typography>
              </Box>
            </Stack>

            {submission.status === "error" &&
              <Stack spacing="10px" >
                <Typography sx={{ fontWeight: "bold" }} >Error message</Typography>
                <TerminalBlock text={submission.error_message} hug error />
              </Stack>
            }

            <Stack spacing="10px" >
              <Typography sx={{ fontWeight: "bold" }} >Sourcecode</Typography>
              <MyCodeEditor className="bg-black-editor" editable={false} value={submission.sourcecode_content} />
            </Stack>

            {/* submission.status !== "error" && */
              <Stack spacing="10px" >
                <Stack spacing="10px" >
                  <Typography sx={{ fontWeight: "bold" }} >Result</Typography>
                  {Array.isArray(submission.result) && submission.result &&
                    <>
                      {submission.result.length === 0 && <TerminalBlock text="No output" hug />}
                      {submission.result.length > 0 &&
                        submission.result.map((r, i) => <MyDiff key={i} insPage={insPage} isPassed={r.is_passed} actual={r.actual} expected={r.expected} testcaseNo={r.testcase_no} />)
                      }
                    </>
                  }
                  {typeof submission.result === "string" &&
                    <TerminalBlock text={submission.result} hug />
                  }
                </Stack>
              </Stack>
            }
          </Stack>
        </Stack>

      </Box >
    )
  }

}

export default SubmissionInfo