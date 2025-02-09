import { Outlet } from "react-router-dom";
import Sidebar from "@/components/_shared/Sidebar";
import UserAvatar from "@/components/_shared/UserAvatar"
import { Box, Container } from "@mui/system";
import ServerTimeDisplay from "@/components/_shared/ServerTimeDisplay";

const InstructorLayout = () => {


  return (
    <>
      <Sidebar />
      <Box marginX={10} paddingTop={2} paddingBottom={5}>
        <ServerTimeDisplay />
        <UserAvatar />
        <Container maxWidth="xl" >
          <Outlet />
        </Container>
      </Box>
      <footer></footer>
    </>
  )
}

export default InstructorLayout